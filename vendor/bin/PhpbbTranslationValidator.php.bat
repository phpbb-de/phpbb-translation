@ECHO OFF
SET BIN_TARGET=%~dp0/../phpbb/translation-validator/src/Phpbb/TranslationValidator/PhpbbTranslationValidator.php
php "%BIN_TARGET%" %*
