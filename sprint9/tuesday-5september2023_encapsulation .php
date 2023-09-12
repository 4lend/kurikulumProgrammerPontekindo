<?php

class Company {
    var Programmer $programmer;
}

$company = new Company();

$company->programmer = new Programmer("Eko");
$company->programmer = new BackendProgrammer ("Eko");
$company->programmer = new FrontendProgrammer("Eko");

function programmer

?>