#!/bin/bash
echo "If you are seeing this text, Container 2 is running fine."
dd if=/dev/random bs=4 count=16 status=none | od -A none -t u4
