<?php

class Ativo
{
	private $id;
	private $sigla;
	private $margem_day_trade;
	private $margem_swing_trade;
	private $hora_abertura;
	private $hora_encerramento;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getSigla()
	{
		return $this->sigla;
	}

	/**
	 * @param mixed $sigla
	 */
	public function setSigla($sigla)
	{
		$this->sigla = $sigla;
	}

	/**
	 * @return mixed
	 */
	public function getMargemDayTrade()
	{
		return $this->margem_day_trade;
	}

	/**
	 * @param mixed $margem_day_trade
	 */
	public function setMargemDayTrade($margem_day_trade)
	{
		$this->margem_day_trade = $margem_day_trade;
	}

	/**
	 * @return mixed
	 */
	public function getMargemSwingTrade()
	{
		return $this->margem_swing_trade;
	}

	/**
	 * @param mixed $margem_swing_trade
	 */
	public function setMargemSwingTrade($margem_swing_trade)
	{
		$this->margem_swing_trade = $margem_swing_trade;
	}

	/**
	 * @return mixed
	 */
	public function getHoraAbertura()
	{
		return $this->hora_abertura;
	}

	/**
	 * @param mixed $hora_abertura
	 */
	public function setHoraAbertura($hora_abertura)
	{
		$this->hora_abertura = $hora_abertura;
	}

	/**
	 * @return mixed
	 */
	public function getHoraEncerramento()
	{
		return $this->hora_encerramento;
	}

	/**
	 * @param mixed $hora_encerramento
	 */
	public function setHoraEncerramento($hora_encerramento)
	{
		$this->hora_encerramento = $hora_encerramento;
	}


}
