<?php
/**
 * @filename: ResponseStructureInterface.php
 */
declare(strict_types=1);

/** @namespace */
namespace Awsm3\Structure\Response;

/**
 * Interface ResponseStructureInterface
 * @package Awsm3\Structure\Response
 */
interface ResponseStructureInterface
{
    const
        STATUS_KEY = 'status',
        MESSAGES_KEY = 'messages',
        DATA_KEY = 'data';

    const
        HTTP_OK = Http\Status::HTTP_OK,
        HTTP_CREATED = Http\Status::HTTP_CREATED,
        HTTP_BAD_REQUEST = Http\Status::HTTP_BAD_REQUEST,
        HTTP_UNAUTHORIZED = Http\Status::HTTP_UNAUTHORIZED;


    /**
     * @return int
     */
    public function getHttpStatus(): int;

    /**
     * @param int $httpStatus
     *
     * @return ResponseStructureInterface
     */
    public function setHttpStatus(int $httpStatus): ResponseStructureInterface;

    /**
     * @return bool
     */
    public function getStatus(): bool;

    /**
     * @param bool $status
     *
     * @return ResponseStructureInterface
     */
    public function setStatus(bool $status): ResponseStructureInterface;

    /**
     * @return array
     */
    public function getMessages(): array;

    /**
     * @param array $messages
     *
     * @return ResponseStructureInterface
     */
    public function setMessages(array $messages): ResponseStructureInterface;

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @param mixed $data
     *
     * @return ResponseStructureInterface
     */
    public function setData($data): ResponseStructureInterface;
}