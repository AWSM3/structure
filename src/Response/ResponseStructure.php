<?php
/**
 * @filename: ResponseStructure.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure\Response;

/** @uses */
use Awsm3\Structure\AbstractStructure;
use Awsm3\Structure\Response\Traits\ArrayableResponseTrait;

/**
 * Class ResponseStructure
 * @package Awsm3\Structure\Response
 */
class ResponseStructure extends AbstractStructure implements ResponseStructureInterface
{
    use ArrayableResponseTrait;

    /** @var int */
    private $httpStatus = self::HTTP_OK;
    /** @var bool */
    private $status = false;
    /** @var array */
    private $messages = [];
    /** @var mixed */
    private $data = [];

    /**
     * ResponseStructure constructor.
     *
     * @param bool  $status
     * @param array $data
     * @param array $messages
     * @param int   $httpStatus
     */
    public function __construct(bool $status = false, $data = [], $messages = [],
                                int $httpStatus = self::HTTP_BAD_REQUEST)
    {
        $this->status = $status;
        $this->data = $data;
        $this->messages = $messages;
        $this->httpStatus = $httpStatus;
    }

    /**
     * В конструктор вынесены параметры, которые можно назначить сеттерами,
     * но иногда удобнее через вызов класса как функции
     *
     * @param bool  $status
     * @param array $data
     * @param array $messages
     * @param int   $httpStatus
     *
     * @return ResponseStructureInterface
     */
    public function __invoke(bool $status = false, $data = [], $messages = [],
                             int $httpStatus = self::HTTP_BAD_REQUEST): ResponseStructureInterface
    {
        $this->setStatus($status);
        $this->setHttpStatus($httpStatus);
        $this->setData($data);
        $this->setMessages($messages);

        return $this;
    }

    /**
     * @return int
     */
    public function getHttpStatus(): int
    {
        return $this->httpStatus;
    }

    /**
     * @param int $httpStatus
     *
     * @return ResponseStructureInterface
     */
    public function setHttpStatus(int $httpStatus): ResponseStructureInterface
    {
        /** Валидация кода. Если чё, то внутри @throws, иначе void */
        Http\Status::isValidCode($httpStatus);

        $this->httpStatus = $httpStatus;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     *
     * @return ResponseStructureInterface
     */
    public function setStatus(bool $status): ResponseStructureInterface
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param array $messages
     *
     * @return ResponseStructureInterface
     */
    public function setMessages(array $messages): ResponseStructureInterface
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     *
     * @return ResponseStructureInterface
     */
    public function setData($data): ResponseStructureInterface
    {
        $this->data = $data;

        return $this;
    }
}