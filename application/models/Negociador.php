<?php

class Negociador
{
	private $id;
	private $nome;
	private $saldo;

	public function __construct($id)
	{
		$this->preencher_dados($id);
	}

	public function comprar(){

	}

	public function vender(){

	}

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
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * @param mixed $nome
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	/**
	 * @return mixed
	 */
	public function getSaldo()
	{
		return $this->saldo;
	}

	/**
	 * @param mixed $saldo
	 */
	public function setSaldo($saldo)
	{
		$this->saldo = $saldo;
	}

}
