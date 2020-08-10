<?php
$dom = new DOMDocument;
libxml_use_internal_errors(true);
$dom->loadHtml('<?xml encoding="utf-8" ?>' .$input);
$ps = $dom->getElementsByTagName('p');
foreach ($ps as $p) {
    return $p->nodeValue;
    break;
}
