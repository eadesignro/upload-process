<?php

namespace LucianMiculescu;

class ProcessFiles
{
    public function processFiles()
    {

        if (isset($_FILES['order'])) {
            $processedFiles = [];

            foreach ($_FILES['order'] as $key => $subFiles) {
                foreach ($subFiles as $subKey => $subValue) {
                    if ($subKey === 'billing_address' || $subKey === 'shipping_address') {
                        continue;
                    }
                    $processedFiles['order'][$key][$subKey] = $subValue;
                }
            }
            $_FILES = $processedFiles;
        }
    }
}
