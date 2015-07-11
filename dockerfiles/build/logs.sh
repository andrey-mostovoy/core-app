#!/bin/sh

set -e

mv /build/conf/nginx.logs.conf /var/www/{{ core_app_name }}/nginx.logs.conf
