#!/usr/bin/env bash

if [ $# -lt 3 ]; then
	echo "usage: $0 <db-name> <db-user> <db-pass> [wp-version]"
	exit 1
fi

DB_NAME=$1
DB_USER=$2
DB_PASS=$3
WP_VERSION=${4-master}

set -ex

# set up a WP install
WP_CORE_DIR=/tmp/wordpress/
mkdir -p $WP_CORE_DIR
wget -nv -O /tmp/wordpress.tar.gz https://github.com/WordPress/WordPress/tarball/$WP_VERSION
tar --strip-components=1 -zxmf /tmp/wordpress.tar.gz -C $WP_CORE_DIR

# set up testing suite
svn co --ignore-externals --quiet http://unit-tests.svn.wordpress.org/trunk/ $WP_TESTS_DIR

cd $WP_TESTS_DIR
cat wp-tests-config-sample.php |
  sed "s:dirname( __FILE__ ) . '/wordpress/':'$WP_CORE_DIR':" |
  sed "s/yourdbnamehere/$DB_NAME/" |
  sed "s/yourusernamehere/$DB_USER/" |
  sed "s/yourpasswordhere/$DB_PASS/" |
  sed "s/localhost/127.0.0.1/" > wp-tests-config.php

# create database
mysql --user="$DB_USER" --password="$DB_PASS" -e "create database if not exists $DB_NAME"
