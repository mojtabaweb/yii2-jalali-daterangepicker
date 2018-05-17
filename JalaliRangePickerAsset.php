<?php
/**
 * @link http://faravaghi.ir
 * @copyright Copyright (c) 2017 faravaghi
 * @license MIT http://opensource.org/licenses/MIT
 */
namespace faravaghi\jalaliDateRangePicker;

use Yii;
use yii\web\AssetBundle as dateRangePickerAsset;

/**
 * Asset bundle for Jalali DateRangePicker Widget
 *
 * @author Mohammad Ebrahim Amini <faravaghi@gmail.com>
 * @since 1.0
 */
class JalaliRangePickerAsset extends dateRangePickerAsset
{
	public static $extra_js = [];

	public function init() {
		Yii::setAlias('@jalalidaterangepicker', __DIR__);

		foreach (static::$extra_js as $js_file) {
			$this->js[]= $js_file;
		}

		return parent::init();
	}

	public $sourcePath = '@jalalidaterangepicker/assets/';

	public $css = [
		// 'css/daterangepicker-bs3.css',
		// 'css/bootstrap-daterangepicker.css',
		'css/daterangepicker.css',
	];

	public $js = [
		'js/moment.js',
		'js/moment-jalaali.js',
		'js/daterangepicker.js',
	];

	public $depends = [
		'yii\bootstrap\BootstrapPluginAsset',
	];

/*	public $css = [
		'css/bootstrap-daterangepicker.css',
	];

	public $js = [
		'js/moment.js',
		'js/daterangepicker.js',
	];

	public $depends = [
	];*/
}
