#!/bin/bash
# SCSS to CSS Bash Script

### Constants
SCSS_DIR=../scss/
BLOCK_DIRS=(../template-parts/blocks/*/)
BLOCK_SCSS_PATHS=""

### Variables
fileNameArray=()

### Loop over block dir
echo '#####################################'
echo '######## GETTING BLOCK DIRS #########'
echo '#####################################'
echo ''

for dir in ${BLOCK_DIRS[@]}; do
    if [ -d "$dir" ]; then
        fileName=$(basename $dir)
        fileNameArray+=($fileName)
        path="$dir$fileName.scss:$dir$fileName.css"    
        BLOCK_SCSS_PATHS+=" $path"
 
        echo $dir
    fi
done

echo ""

### Loop over filename array
echo '#####################################'
echo '######### FILES TO CONVERT ##########'
echo '#####################################'
echo ''

for name in ${fileNameArray[@]}; do
    echo "$name.scss"
done

echo ""

### Sass Watch Blocks
sass --watch $BLOCK_SCSS_PATHS
