#!/bin/bash

set -e

ACCESSLOG=${ACCESSLOG:-$1}

[ "$ACCESSLOG" ] || { echo "please pass the access log into the ACCESSLOG environnement or through \$1" ; exit 2 ; }

ACCESSLOG="$(readlink -f "$ACCESSLOG")"

cd "$(dirname "$0")"

mkdir -p "goaccess"

fw="goaccess/$(date "+%Gw%V")-$(basename "$PWD").html"
set -x
[ "$(find "$fw"  -cmin -240)" ] || goaccess $(find "$ACCESSLOG"* -not -name "*.gz") <(zcat "$ACCESSLOG"*.gz) --log-format=COMBINED -a -o "$fw"

goaccess $(find "$ACCESSLOG"* -not -name "*.gz") --log-format=COMBINED -a -o goaccess/last.html

