<?php

function invokedByCli() {
    return (php_sapi_name() === 'cli');
}