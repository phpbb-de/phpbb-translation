#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../phpbb/translation-validator/src/Phpbb/TranslationValidator"
BIN_TARGET="`pwd`/PhpbbTranslationValidator.php"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
