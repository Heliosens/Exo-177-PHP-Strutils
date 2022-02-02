<?php


class StrUtils
{
    private string $str;

    public function __construct ($str){
        $this->str = $str;
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    public function bold ($item) : string {
        $this->setStr($item);
        return "<strong>" . $this->getStr() . "</strong>";
    }

    public function italic ($item) : string {
        $this->setStr($item);
        return "<i>" . $this->getStr() . "</i>";
    }

    public function underline ($item) : string {
        $this->setStr($item);
        return "<u>" . $this->getStr() . "</u>";
    }

    public function capitalize ($item) : string {
        $this->setStr($item);
        return strtoupper($this->getStr());
    }

    public function uglify ($item) : string {
        $this->setStr($item);
        return $this->underline($this->italic($this->bold($this->getStr())));
    }

}
