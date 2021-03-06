<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Insert2Article extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			DB::table('article')->insert (
							array(
									array('title'=>'Test 1','content'=>'In the past, configuring a local PHP development environment on your machine was a headache. Installing the proper version of PHP, required extensions, and other needed components is time consuming and confusing. Instead, consider using Laravel Homestead. Homestead is a simple virtual machine designed for Laravel and Vagrant. Since the Homestead Vagrant box is pre-packaged with all of the software you need to build robust PHP applications, you can create a virtualized, isolated development environment in seconds. Here is a list of some of the goodies included with Homestead:','excerpt'=>'Here is a list of some of the goodies included with Homestead','category'=>'1','type'=>'1','create_time'=>'2014-10-19'),
									array('title'=>'Test 2','content'=>'In the past, configuring a local PHP development environment on your machine was a headache. Installing the proper version of PHP, required extensions, and other needed components is time consuming and confusing. Instead, consider using Laravel Homestead. Homestead is a simple virtual machine designed for Laravel and Vagrant. Since the Homestead Vagrant box is pre-packaged with all of the software you need to build robust PHP applications, you can create a virtualized, isolated development environment in seconds. Here is a list of some of the goodies included with Homestead:','excerpt'=>'Here is a list of some of the goodies included with Homestead','category'=>'2','type'=>'1','create_time'=>'2014-10-19'),
									array('title'=>'Test 3','content'=>'In the past, configuring a local PHP development environment on your machine was a headache. Installing the proper version of PHP, required extensions, and other needed components is time consuming and confusing. Instead, consider using Laravel Homestead. Homestead is a simple virtual machine designed for Laravel and Vagrant. Since the Homestead Vagrant box is pre-packaged with all of the software you need to build robust PHP applications, you can create a virtualized, isolated development environment in seconds. Here is a list of some of the goodies included with Homestead:','excerpt'=>'Here is a list of some of the goodies included with Homestead','category'=>'4','type'=>'4','create_time'=>'2014-10-19'),
									array('title'=>'Test 4','content'=>'In the past, configuring a local PHP development environment on your machine was a headache. Installing the proper version of PHP, required extensions, and other needed components is time consuming and confusing. Instead, consider using Laravel Homestead. Homestead is a simple virtual machine designed for Laravel and Vagrant. Since the Homestead Vagrant box is pre-packaged with all of the software you need to build robust PHP applications, you can create a virtualized, isolated development environment in seconds. Here is a list of some of the goodies included with Homestead:','excerpt'=>'Here is a list of some of the goodies included with Homestead','category'=>'1','type'=>'1','create_time'=>'2014-10-19'),
									array('title'=>'Test 5','content'=>'In the past, configuring a local PHP development environment on your machine was a headache. Installing the proper version of PHP, required extensions, and other needed components is time consuming and confusing. Instead, consider using Laravel Homestead. Homestead is a simple virtual machine designed for Laravel and Vagrant. Since the Homestead Vagrant box is pre-packaged with all of the software you need to build robust PHP applications, you can create a virtualized, isolated development environment in seconds. Here is a list of some of the goodies included with Homestead:','excerpt'=>'Here is a list of some of the goodies included with Homestead','category'=>'2','type'=>'2','create_time'=>'2014-10-19'),
									array('title'=>'Test 6','content'=>'In the past, configuring a local PHP development environment on your machine was a headache. Installing the proper version of PHP, required extensions, and other needed components is time consuming and confusing. Instead, consider using Laravel Homestead. Homestead is a simple virtual machine designed for Laravel and Vagrant. Since the Homestead Vagrant box is pre-packaged with all of the software you need to build robust PHP applications, you can create a virtualized, isolated development environment in seconds. Here is a list of some of the goodies included with Homestead:','excerpt'=>'Here is a list of some of the goodies included with Homestead','category'=>'3','type'=>'3','create_time'=>'2014-10-19'),
									array('title'=>'Test 7','content'=>'In the past, configuring a local PHP development environment on your machine was a headache. Installing the proper version of PHP, required extensions, and other needed components is time consuming and confusing. Instead, consider using Laravel Homestead. Homestead is a simple virtual machine designed for Laravel and Vagrant. Since the Homestead Vagrant box is pre-packaged with all of the software you need to build robust PHP applications, you can create a virtualized, isolated development environment in seconds. Here is a list of some of the goodies included with Homestead:','excerpt'=>'Here is a list of some of the goodies included with Homestead','category'=>'4','type'=>'4','create_time'=>'2014-10-19')
								 )
							);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			DB::table('article')->delete();
	}

}
