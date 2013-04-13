# EdpClassCounter

Just a simple module to provide a count of loaded classes in the
ZendDeveloperTools toolbar.

This count subtracts built in classes and ZF2 classes loaded up until the ZDT
collector is called... The total number is not meant to be 100% accurate, but
it can help you when optimizing your code to quickly see that you've reduced
the number of classes loaded during a request.
