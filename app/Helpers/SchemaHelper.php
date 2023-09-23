<?php

namespace App\Helpers;

class SchemaHelper
{
    public static function createFaqArray(array $faqs): array
    {
        $faqArray = [];

        foreach ($faqs as $faq) {
            $faqArray[] = [
                "@type" => "Question",
                "name" => $faq->title,
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $faq->paragraph[0],
                ]
            ];
        }

        return $faqArray;
    }

    public static function createSchemaArray(array $faqArray): array
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => $faqArray
        ];
    }

    public static function getSchema(array  $faqs): string
    {
        $faqArray = self::createFaqArray($faqs);
        $schemaArray = self::createSchemaArray($faqArray);
        $schema = json_encode($schemaArray, JSON_PRETTY_PRINT);

        return $schema;
    }
}
