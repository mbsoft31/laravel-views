<?php

namespace Mbsoft31\LaravelViews;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use JsonSerializable;

class View implements Arrayable, Jsonable, JsonSerializable
{

    public ?int $id;

    /**
     * @param string $model_type
     * @param int $model_id
     * @param int $views
     */
    public function __construct(
        public string $model_type,
        public int $model_id,
        public int $views = 0)
    {}

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getModelId(): int
    {
        return $this->model_id;
    }

    /**
     * @param int $model_id
     */
    public function setModelId(int $model_id): void
    {
        $this->model_id = $model_id;
    }

    /**
     * Returns the view as an array
     *
     * @return array
     */
    #[ArrayShape(['id' => "int|null", 'model_type' => "string", 'model_id' => "int", 'views' => "int"])]
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
            'views' => $this->views,
        ];
    }

    /**
     * Returns the view as a JSON
     *
     * @param int $options
     * @return array|string
     */
    public function toJson($options = 0): array|string
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * @return array
     */
    #[Pure] #[ArrayShape(['id' => "\int|null", 'model_type' => "string", 'model_id' => "int", 'views' => "int"])]
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
