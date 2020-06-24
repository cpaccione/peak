#!/bin/bash
# SCSS to CSS Bash Script

### Constants
SCSS_DIR=../scss/
CSS_DIR=../css/
FILE_NAME=peak

### Sass Watch Main File
sass --watch "$SCSS_DIR$FILE_NAME.scss:$CSS_DIR$FILE_NAME.css"
