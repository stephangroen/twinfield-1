<?php

namespace PhpTwinfield;

use PhpTwinfield\Transactions\TransactionFields\OfficeField;

class MatchSet
{
    use OfficeField;

    /**
     * @var Enums\MatchCode
     */
    private $matchCode;

    /**
     * @var \DateTimeInterface
     */
    private $matchDate;

    /**
     * @var MatchLine[]
     */
    private $lines = [];

    /**
     * @return Enums\MatchCode
     */
    public function getMatchCode(): Enums\MatchCode
    {
        return $this->matchCode;
    }

    /**
     * @param Enums\MatchCode $matchCode
     * @return $this
     */
    public function setMatchCode(Enums\MatchCode $matchCode)
    {
        $this->matchCode = $matchCode;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMatchDate(): \DateTimeInterface
    {
        return $this->matchDate;
    }

    /**
     * @param \DateTimeInterface $matchDate
     * @return $this
     */
    public function setMatchDate(\DateTimeInterface $matchDate)
    {
        $this->matchDate = $matchDate;

        return $this;
    }

    /**
     * @param MatchLine $line
     * @return $this
     */
    public function addLine(MatchLine $line): self
    {
        $this->lines[] = $line;

        return $this;
    }

    /**
     * @return MatchLine[]
     */
    public function getLines(): array
    {
        return $this->lines;
    }
}
