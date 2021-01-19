#!/bin/bash
# newAppPackageTests.sh

set -o posix

testDshNewAppPackageRunsWithErrorIfAPP_NAMEIsNotSpecified() {
    assertError "dsh --new AppPackage"
}

testDshNewAppPackageRunsWithErrorIfPATH_TO_APP_PACKAGEIsNotSpecified() {
    assertError "dsh --new AppPackage AppName"
}

testDshNewAppPackageRunsWithErrorIfAFileExistsAtPATH_TO_NEW_APP_PACKAGE() {
    echo "" > "${HOME}/AppName"
    assertError "dsh --new AppPackage AppName ${HOME}"
    rm "${HOME}/AppName"
}

testDshNewAppPackageRunsWithErrorIfADirectoryExistsAtPATH_TO_NEW_APP_PACKAGE() {
    mkdir "${HOME}/AppName"
    assertError "dsh --new AppPackage AppName ${HOME}"
    rm -R "${HOME}/AppName"
}

testDshNewAppPackageCreatesADirectoryForTheTheNewAppPackageAtPATH_TO_NEW_APP_PACKAGEForwardSlashAppName() {
    assertDirectoryExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesCssDirectoryInTheNewAppPackagesDirectory() {
    assertDirectoryExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName/css"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesJsDirectoryInTheNewAppPackagesDirectory() {
    assertDirectoryExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName/js"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesDynamicOutputDirectoryInTheNewAppPackagesDirectory() {
    assertDirectoryExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName/DynamicOutput"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesResponsesSHInTheNewAppPackagesDirectory() {
    assertFileExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName/Responses.sh"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesResponsesSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent() {
    dsh --new AppPackage AppName "${HOME}"
    assertEquals "$(cat "$(determineDshUnitDirectoryPath | sed 's/dshUnit/dsh/g')/FileTemplates/Responses.sh")" "$(cat ${HOME}/AppName/Responses.sh)"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesRequestsSHInTheNewAppPackagesDirectory() {
    assertFileExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName/Requests.sh"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesRequestsSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent() {
    dsh --new AppPackage AppName "${HOME}"
    assertEquals "$(cat "$(determineDshUnitDirectoryPath | sed 's/dshUnit/dsh/g')/FileTemplates/Requests.sh")" "$(cat ${HOME}/AppName/Requests.sh)"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesOutputComponentsSHInTheNewAppPackagesDirectory() {
    assertFileExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName/OutputComponents.sh"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesOutputComponentsSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent() {
    dsh --new AppPackage AppName "${HOME}"
    assertEquals "$(cat "$(determineDshUnitDirectoryPath | sed 's/dshUnit/dsh/g')/FileTemplates/OutputComponents.sh")" "$(cat ${HOME}/AppName/OutputComponents.sh)"
    rm -R "${HOME}/AppName/"
}

testDshNewAppPackageCreatesConfigSHInTheNewAppPackagesDirectory() {
    assertFileExists "dsh --new AppPackage AppName ${HOME}" "${HOME}/AppName/config.sh"
    rm -R "${HOME}/AppName/"
}

expectedConfigSHContent() {
    cat "$(determineDshUnitDirectoryPath | sed 's/dshUnit/dsh/g')/FileTemplates/config.sh" | sed "s/APP_NAME/${1}/g" | sed "s,DOMAIN,${2},g"
}

testDshNewAppPackageCreatesConfigSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent() {
    local app_name domain
    app_name="AppName${RANDOM}"
    domain="http://localhost:8942/"
    dsh --new AppPackage "${app_name}" "${HOME}" "${domain}"
    assertEquals "$(expectedConfigSHContent "${app_name}" "${domain}")" "$(cat ${HOME}/${app_name}/config.sh)"
    rm -R "${HOME}/${app_name}/"
}

runTest testDshNewAppPackageRunsWithErrorIfAPP_NAMEIsNotSpecified
runTest testDshNewAppPackageRunsWithErrorIfPATH_TO_APP_PACKAGEIsNotSpecified
runTest testDshNewAppPackageRunsWithErrorIfAFileExistsAtPATH_TO_NEW_APP_PACKAGE
runTest testDshNewAppPackageRunsWithErrorIfADirectoryExistsAtPATH_TO_NEW_APP_PACKAGE
runTest testDshNewAppPackageCreatesADirectoryForTheTheNewAppPackageAtPATH_TO_NEW_APP_PACKAGEForwardSlashAppName
runTest testDshNewAppPackageCreatesCssDirectoryInTheNewAppPackagesDirectory
runTest testDshNewAppPackageCreatesJsDirectoryInTheNewAppPackagesDirectory
runTest testDshNewAppPackageCreatesDynamicOutputDirectoryInTheNewAppPackagesDirectory
runTest testDshNewAppPackageCreatesResponsesSHInTheNewAppPackagesDirectory
runTest testDshNewAppPackageCreatesResponsesSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent
runTest testDshNewAppPackageCreatesRequestsSHInTheNewAppPackagesDirectory
runTest testDshNewAppPackageCreatesRequestsSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent
runTest testDshNewAppPackageCreatesOutputComponentsSHInTheNewAppPackagesDirectory
runTest testDshNewAppPackageCreatesOutputComponentsSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent
runTest testDshNewAppPackageCreatesConfigSHInTheNewAppPackagesDirectory
runTest testDshNewAppPackageCreatesConfigSHInTheNewAppPackagesDirectoryWhoseContentMatchesExpectedContent
