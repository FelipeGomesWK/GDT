<?php

class Custos
{
	private $id;
	private $corretagem;
	private $emolumentos;
	private $ir;
	private $nota_corretora;
	// private $iss_pis_cofins;

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
	public function getCorretagem()
	{
		return $this->corretagem;
	}

	/**
	 * @param mixed $corretagem
	 */
	public function setCorretagem($corretagem)
	{
		$this->corretagem = $corretagem;
	}

	/**
	 * @return mixed
	 */
	public function getEmolumentos()
	{
		return $this->emolumentos;
	}

	/**
	 * @param mixed $emolumentos
	 */
	public function setEmolumentos($emolumentos)
	{
		$this->emolumentos = $emolumentos;
	}

	/**
	 * @return mixed
	 */
	public function getIr()
	{
		return $this->ir;
	}

	/**
	 * @param mixed $ir
	 */
	public function setIr($ir)
	{
		$this->ir = $ir;
	}

	/**
	 * @return mixed
	 */
	public function getNotaCorretora()
	{
		return $this->nota_corretora;
	}

	/**
	 * @param mixed $nota_corretora
	 */
	public function setNotaCorretora($nota_corretora)
	{
		$this->nota_corretora = $nota_corretora;
	}
}
