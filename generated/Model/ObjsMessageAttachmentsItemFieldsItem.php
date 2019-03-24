<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsMessageAttachmentsItemFieldsItem
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var bool
     */
    protected $short;

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShort(): ?bool
    {
        return $this->short;
    }

    /**
     * @param bool $short
     *
     * @return self
     */
    public function setShort(?bool $short): self
    {
        $this->short = $short;

        return $this;
    }
}