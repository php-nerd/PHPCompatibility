<?php

// These are all keywords that were added in 5.0 or later attempted to be 
// called incorrectly as functions

abstract();
callable();
catch();
clone();
final();
finally(); // introduced in 5.5
goto();
implements();
interface();
instanceof();
insteadof();
namespace();
private();
protected();
public();
throw();
trait();
try();

// These are all valid uses of catch
try {}
catch
(Exception $e) {}
try {} catch(Exception $e) {}
try {
} catch (Exception $e) {}
