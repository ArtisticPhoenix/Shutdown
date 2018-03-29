<?php
namespace evo\errorhandler\Exception;

/**
 * (eJinn Generated File, do not edit directly)
 * eJinn The Exception Genie
 *
 * @author ArtisticPhoenix
 * @package Evo
 * @subpackage Exception
 * @link https://github.com/ArtisticPhoenix/eJinn/issues
 * @varsion 1.0.0
 * @eJinn:buildVersion 1.0.0
 * @eJinn:buildTime 1522309684.673
 */
class RuntimeError extends \ErrorException implements \evo\errorhandler\Exception\errorhandlerExceptionInterface
{

	/**
	 * @var int
	 */
	const ERROR_CODE = 909;

    /**
     *
     * {@inheritDoc}
     * @see \ErrorException::__construct()
     */
    public function __construct($message = "", $code = 909, $severity = 1, $filename = null, $lineno = null, \Exception $previous = null)
    {
        parent::__construct($message, $code, $severity, $filename, $lineno, $previous);
    }
}