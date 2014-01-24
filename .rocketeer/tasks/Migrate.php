<?php

/**
 * Migrate class
 *
 * @author    Mamoru Otsuka http://madroom-project.blogspot.jp/
 * @copyright 2013 Mamoru Otsuka
 * @license   WTFPL License http://www.wtfpl.net/txt/copying/
 */
class Migrate extends Rocketeer\Traits\Task
{
	/**
	 * @inheritDoc
	 */
	protected $description = 'Migrates the database';

	/**
	 * @inheritDoc
	 */
	public function execute()
	{
		// 実行時にメッセージとして表示されます
		$this->command->info($this->description);

		// currentディレクトリ内でコマンドを実行します
		$output = $this->runForCurrentRelease('php oil r migrate');

		// 第一引数は失敗時のメッセージです
		// 第二引数は失敗時の詳細です
		// 第三引数は成功時のメッセージです
		return $this->checkStatus('Migrate failed', $output, 'Migrate successfully');
	}
}
