<?php

namespace DesignPattern\Iterator;

class CsvIterator implements \Iterator
{
    const int ROW_SIZE = 4096;
    protected $filePointer = null;
    protected $currentElement = null;
    protected $rowCounter = null;
    protected $delimiter = null;

    public function __construct($file, $delimiter = ',')
    {
        try {
            $this->filePointer = fopen($file, 'rb');
            $this->delimiter = $delimiter;
        } catch (\Exception $e) {
            throw new \Exception('The file "' . $file . '" cannot be read.');
        }
    }

    /**
     * @inheritDoc
     */
    public function current(): mixed
    {
        $this->currentElement = fgetcsv($this->filePointer, self::ROW_SIZE, $this->delimiter);
        $this->rowCounter++;
        return $this->currentElement;
    }

    /**
     * This method checks if the end of file has been reached.
     *
     * @return bool Returns true on EOF reached, false otherwise.
     */
    public function next(): bool
    {
        if (is_resource($this->filePointer)) {
            return !feof($this->filePointer);
        }
        return false;
    }

    /**
     * This method returns the current row number.
     *
     * @return int The current row number.
     */
    public function key(): mixed
    {
        return $this->rowCounter;
    }

    /**
     * This method checks if the next row is a valid row.
     *
     * @return bool If the next row is a valid row.
     */
    public function valid(): bool
    {
        if (!$this->next()) {
            if (is_resource($this->filePointer)) {
                fclose($this->filePointer);
            }
            return false;
        }
        return true;
    }

    /**
     * This method resets the file pointer.
     */
    public function rewind(): void
    {
        $this->rowCounter = 0;
        rewind($this->filePointer);
    }
}