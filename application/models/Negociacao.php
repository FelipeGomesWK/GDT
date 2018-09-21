<?php

class Negociacao
{
	private $id;
	private $ativo;
	private $tipo_entrada;
	private $quantidade;
	private $preco_entrada;
	private $preco_saida;
	protected $resultado;
	private $inicio;
	private $fim;




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
	public function getAtivo()
	{
		return $this->ativo;
	}

	/**
	 * @param mixed $ativo
	 */
	public function setAtivo($ativo)
	{
		$this->ativo = $ativo;
	}

	/**
	 * @return mixed
	 */
	public function getTipoEntrada()
	{
		return $this->tipo_entrada;
	}

	/**
	 * @param mixed $tipo_entrada
	 */
	public function setTipoEntrada($tipo_entrada)
	{
		$this->tipo_entrada = $tipo_entrada;
	}

	/**
	 * @return mixed
	 */
	public function getQuantidade()
	{
		return $this->quantidade;
	}

	/**
	 * @param mixed $quantidade
	 */
	public function setQuantidade($quantidade)
	{
		$this->quantidade = $quantidade;
	}

	/**
	 * @return mixed
	 */
	public function getPrecoEntrada()
	{
		return $this->preco_entrada;
	}

	/**
	 * @param mixed $preco_entrada
	 */
	public function setPrecoEntrada($preco_entrada)
	{
		$this->preco_entrada = $preco_entrada;
	}

	/**
	 * @return mixed
	 */
	public function getPrecoSaida()
	{
		return $this->preco_saida;
	}

	/**
	 * @param mixed $preco_saida
	 */
	public function setPrecoSaida($preco_saida)
	{
		$this->preco_saida = $preco_saida;
	}

	/**
	 * @return mixed
	 */
	public function getResultado()
	{
		return $this->resultado;
	}

	/**
	 * @param mixed $resultado
	 */
	public function setResultado($resultado)
	{
		$this->resultado = $resultado;
	}

	/**
	 * @return mixed
	 */
	public function getInicio()
	{
		return $this->inicio;
	}

	/**
	 * @param mixed $inicio
	 */
	public function setInicio($inicio)
	{
		$this->inicio = $inicio;
	}

	/**
	 * @return mixed
	 */
	public function getFim()
	{
		return $this->fim;
	}

	/**
	 * @param mixed $fim
	 */
	public function setFim($fim)
	{
		$this->fim = $fim;
	}

}
