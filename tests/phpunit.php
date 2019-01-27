<phpunit backupGlobals="false"
         backupStaticAttributes="false"
         bootstrap="../vendor/autoload.php"
         cacheTokens="true"
         colors="true"
         convertErrorsToExceptions="true"
         convertNoticesToExceptions="true"
         convertWarningsToExceptions="true"
         processIsolation="false"
         stopOnFailure="false"
         syntaxCheck="false"
         verbose="false">
    <filter>
        <whitelist addUncoveredFilesFromWhitelist="false">
            <directory>../src/</directory>
        </whitelist>
    </filter>
    <testsuite name="Hikarine3\Py2php Test Suite">
        <directory>.</directory>
    </testsuite>
</phpunit>