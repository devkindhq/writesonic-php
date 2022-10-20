<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get Seo Meta Tags Blog from WriteSonic
 *
 *
 * <b> A set of optimized meta title and meta description tags that will boost your search rankings for your blog. </b>
 */
final class MetaBlog extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/meta-blog';
    public const PARAMS = ['blog_description', 'search_term', 'blog_title', 'primary_keyword'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $blog_description;

    /** @var string */
    protected string $search_term;

    /** @var string */
    protected string $blog_title;

    /** @var string */
    protected string $primary_keyword;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $blog_description, string $search_term, string $blog_title, string $primary_keyword)
    {
        $this->blog_description = $blog_description;
        $this->search_term = $search_term;
        $this->blog_title = $blog_title;
        $this->primary_keyword = $primary_keyword;
        return $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor blog_description attribute
     *
     * @return string
     */
    public function getBlogDescription(): string
    {
        return $this->blog_description;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setBlogDescription(string $value): self
    {
        $this->blog_description = $value;
        return $this;
    }

    /**
     * Accessor search_term attribute
     *
     * @return string
     */
    public function getSearchTerm(): string
    {
        return $this->search_term;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setSearchTerm(string $value): self
    {
        $this->search_term = $value;
        return $this;
    }

    /**
     * Accessor blog_title attribute
     *
     * @return string
     */
    public function getBlogTitle(): string
    {
        return $this->blog_title;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setBlogTitle(string $value): self
    {
        $this->blog_title = $value;
        return $this;
    }

    /**
     * Accessor primary_keyword attribute
     *
     * @return string
     */
    public function getPrimaryKeyword(): string
    {
        return $this->primary_keyword;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPrimaryKeyword(string $value): self
    {
        $this->primary_keyword = $value;
        return $this;
    }

    /**
     * Accessor for Payload attribute
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPayload(array $value): self
    {
        $this->payload = $value;
        return $this;
    }

    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getRequiredParameters(): array
    {
        return self::PARAMS;
    }

    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [
                 "blog_description" => $this->getBlogDescription(),
                 "search_term" => $this->getSearchTerm(),
                 "blog_title" => $this->getBlogTitle(),
                 "primary_keyword" => $this->getPrimaryKeyword(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
