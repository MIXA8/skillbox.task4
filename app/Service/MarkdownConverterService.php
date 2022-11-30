<?php

namespace App\Service;

use League\CommonMark\GithubFlavoredMarkdownConverter;

class MarkdownConverterService
{
    public bool $MARKDOWN_DISABLE_BOLD = false;
    public GithubFlavoredMarkdownConverter $converter;

    public function __construct()
    {
        $this->converter = new GithubFlavoredMarkdownConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);
    }

    public function convertHtml($body)
    {
        return $this->converter->convert($body)->getContent();
    }

}
