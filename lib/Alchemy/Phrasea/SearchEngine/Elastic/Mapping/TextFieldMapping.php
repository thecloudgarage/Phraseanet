<?php

/*
 * This file is part of phrasea-4.0.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Phrasea\SearchEngine\Elastic\Mapping;

class TextFieldMapping extends ComplexFieldMapping
{
    /**
     * @var string|null
     */
    private $analyzer = null;

    /**
     * @var string|null
     */
    private $searchAnalyzer = null;

    /**
     * @var string|null
     */
    private $termVector = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct($name, self::TYPE_TEXT);
    }

    public function addAnalyzedChild($name, $analyzer)
    {
        $child = new self($name);

        $child->setAnalyzer($analyzer);
        $this->addChild($child);

        return $this;
    }

    public function addAnalyzedChildren(array $locales)
    {
        $child = new TextFieldMapping('light');
        $child->setAnalyzer('general_light');
        $this->addChild($child);

        $child = new TextFieldMapping('truncated');
        $child->setAnalyzer('truncation_analyzer', 'indexing');
        $child->setAnalyzer('truncation_analyzer#search', 'searching');
        $this->addChild($child);

        $this->addLocalizedChildren($locales);

        return $this;
    }

    public function addLocalizedChildren(array $locales)
    {
        foreach ($locales as $locale) {
            /** @var TextFieldMapping $child */
            $child = new TextFieldMapping($locale);

            $child->setAnalyzer(sprintf('%s_full', $locale));
            $this->addChild($child);
        }

        return $this;
    }

    /**
     * @param string $analyzer
     * @param string|null $type
     * @return $this
     */
    public function setAnalyzer($analyzer, $type = null)
    {
        /**
         * @todo Split into separate setters
         */
        switch ($type) {
            case null:
                $this->analyzer = $analyzer;
                $this->searchAnalyzer = null;

                break;
            case 'indexing':
                $this->analyzer = $analyzer;

                break;
            case 'searching':
                $this->searchAnalyzer = $analyzer;

                break;
            default:
                throw new \LogicException(sprintf('Invalid analyzer type "%s".', $type));
        }

        return $this;
    }

    public function enableTermVectors($applyToChildren = false)
    {
        $this->termVector = 'with_positions_offsets';

        if ($applyToChildren) {
            /** @var self $child */
            foreach ($this->getChildren() as $child) {
                if ($child instanceof TextFieldMapping) {
                    $child->enableTermVectors(false);
                }
            }
        }

        return $this;
    }

    /**
     * @return array
     */
    protected function getProperties()
    {
        $properties = [];

        if ($this->analyzer) {
            $properties['analyzer'] = $this->analyzer;
        }

        if ($this->searchAnalyzer) {
            $properties['search_analyzer'] = $this->searchAnalyzer;
        }

        if ($this->termVector) {
            $properties['term_vector'] = $this->termVector;
        }

        return array_replace(parent::getProperties(), $properties);
    }
}
