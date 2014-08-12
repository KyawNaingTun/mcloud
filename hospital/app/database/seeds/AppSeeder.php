<?php

use Illuminate\Database\SeedServiceProvider;

class AppSeeder extends Seeder{
	public function run(){

		// clear database
		DB::table('role')->delete();
		DB::table('users')->delete();

		//  for role table
		$admin = Role::create(array(
			'name' => 'admin'
			));
		$normal = Role::create(array(
			'name' => 'normal'
			));
		$professional = Role::create(array(
			'name' => 'professional'
			));

		$this->command->info('Role datas have benn finished!');
		// for user table
		User::create(array(
			'fullname' => 'kyawnaingtun',
			'email' => 'kyawnainghtun93@gmail.com',
			'password' => Hash::make('password'),
			'role_id' => $admin->id
			));
		User::create(array(
			'fullname' => 'sismuemaw',
			'email' => 'sismuemaw@gmail.com',
			'password' => Hash::make('password'),
			'role_id' => $normal->id
			));
		User::create(array(
			'fullname' => 'khatkhat',
			'email' => 'khatkhat@gmail.com',
			'password' => Hash::make('password'),
			'role_id' => $professional->id
			));

		$this->command->info('User datas have benn finished!');
// 		//  for post table
// 			//  It is admin posts
// 		Post::create(array(
// 			'title' => 'ဂါဇာသတင္း bbc ',
// 			'content' => 'ဂါဇာမွာရွိတဲ႕ ပါလက္စတိုင္းေတြ ခိုလွဳံေနတဲ႕ရာဖာက ကုလသမဂၢ ေက်ာင္းအနီးကို တိုက္ခို္က္ခံရတဲ႕ အတြက္လူ၁၀ဦးထက္မနည္းေသဆုံးသြားပါတယ္။ ေထာင္ခ်ီတဲ႕ ပါလက္စတိုင္းေတြ ခိုလွဳံေနတဲ့ ရာဖာက ေဆာက္အဦဝ
// င္ေပါက္ကို ထိမွန္တာလို႕သိရပါတယ္။ အစၥေရးဘက္က အခုလိုတေၾကာ့ျပန္တိုင္ခိုက္ေနတဲ႕ အေပၚမွာ တစုံတရာ ေဝဖန္ေျပာဆိုျခင္းမရွိပါဘူး။ ဂါဇာက က်န္းမာေရးဆိုင္ရာ တာဝန္ခံေတြကေတာ့ တနဂၤေႏြေန႕တိုက္ခိုက္မွဳေတြေၾကာင္႕ ေသဆုံးသူ အေယာက္၃၀ ရွိသြားျပီလို႕ေျပာပါတယ္။',
// 			'user_id' => $admin->id
// 			));
// 		Post::create(array(
// 			'title' => 'ICYMI Productivity',
// 			'content' => 'ICYMI: Productivity, file management, media, system, security -- here are 25 of the most useful free and almost-free desktop apps, tested on Windows 7, Windows 8, and Windows 8.1 Update 1.',
// 			'user_id' => $admin->id
// 			));
// 		Post::create(array(
// 			'title' => 'ေက်ာင္း၀ရန္တာၿပိဳက်ခဲ့သည့္ေက်ာင္းမွ ေက်ာင္းအုပ္ႀကီးကို ရာထူးေလွ်ာ့ခ်အေရးယူ ',
// 			'content' => 'က်ာင္းစဖြင့္သည့္ေန႔တြင္ ေက်ာင္း၀ရန္တာၿပိဳက်ခဲ့သည့္ ပုတီးကုန္း အထကမွ ေက်ာင္း အုပ္ဆရာႀကီးအား အလက ေက်ာင္းအုပ္အျဖစ္ ရာထူးေလွ်ာ့ ခ်အေရးယူခဲ့ေၾကာင္း ပဲခူးအ ေနာက္ပိုင္းတုိင္း ပညာေရးၫႊန္ ၾကားေရးမွဴး႐ုံးမွ သတင္းရရွိ သည္။',
// 			'user_id' => $admin->id
// 			));
// 			//  it is normal posts
// 		Post::create(array(
// 			'title' => 'ဂါဇာသတင္း bbc ',
// 			'content' => 'ဂါဇာမွာရွိတဲ႕ ပါလက္စတိုင္းေတြ ခိုလွဳံေနတဲ႕ရာဖာက ကုလသမဂၢ ေက်ာင္းအနီးကို တိုက္ခို္က္ခံရတဲ႕ အတြက္လူ၁၀ဦးထက္မနည္းေသဆုံးသြားပါတယ္။ ေထာင္ခ်ီတဲ႕ ပါလက္စတိုင္းေတြ ခိုလွဳံေနတဲ့ ရာဖာက ေဆာက္အဦဝ
// င္ေပါက္ကို ထိမွန္တာလို႕သိရပါတယ္။ အစၥေရးဘက္က အခုလိုတေၾကာ့ျပန္တိုင္ခိုက္ေနတဲ႕ အေပၚမွာ တစုံတရာ ေဝဖန္ေျပာဆိုျခင္းမရွိပါဘူး။ ဂါဇာက က်န္းမာေရးဆိုင္ရာ တာဝန္ခံေတြကေတာ့ တနဂၤေႏြေန႕တိုက္ခိုက္မွဳေတြေၾကာင္႕ ေသဆုံးသူ အေယာက္၃၀ ရွိသြားျပီလို႕ေျပာပါတယ္။',
// 			'user_id' => $normal->id
// 			));
// 		Post::create(array(
// 			'title' => 'ICYMI Productivity',
// 			'content' => 'ICYMI: Productivity, file management, media, system, security -- here are 25 of the most useful free and almost-free desktop apps, tested on Windows 7, Windows 8, and Windows 8.1 Update 1.',
// 			'user_id' => $normal->id
// 			));
// 		Post::create(array(
// 			'title' => 'ေက်ာင္း၀ရန္တာၿပိဳက်ခဲ့သည့္ေက်ာင္းမွ ေက်ာင္းအုပ္ႀကီးကို ရာထူးေလွ်ာ့ခ်အေရးယူ ',
// 			'content' => 'က်ာင္းစဖြင့္သည့္ေန႔တြင္ ေက်ာင္း၀ရန္တာၿပိဳက်ခဲ့သည့္ ပုတီးကုန္း အထကမွ ေက်ာင္း အုပ္ဆရာႀကီးအား အလက ေက်ာင္းအုပ္အျဖစ္ ရာထူးေလွ်ာ့ ခ်အေရးယူခဲ့ေၾကာင္း ပဲခူးအ ေနာက္ပိုင္းတုိင္း ပညာေရးၫႊန္ ၾကားေရးမွဴး႐ုံးမွ သတင္းရရွိ သည္။',
// 			'user_id' => $normal->id
// 			));

// 		//  it is professional posts
// 		Post::create(array(
// 			'title' => 'ဂါဇာသတင္း bbc ',
// 			'content' => 'ဂါဇာမွာရွိတဲ႕ ပါလက္စတိုင္းေတြ ခိုလွဳံေနတဲ႕ရာဖာက ကုလသမဂၢ ေက်ာင္းအနီးကို တိုက္ခို္က္ခံရတဲ႕ အတြက္လူ၁၀ဦးထက္မနည္းေသဆုံးသြားပါတယ္။ ေထာင္ခ်ီတဲ႕ ပါလက္စတိုင္းေတြ ခိုလွဳံေနတဲ့ ရာဖာက ေဆာက္အဦဝ
// င္ေပါက္ကို ထိမွန္တာလို႕သိရပါတယ္။ အစၥေရးဘက္က အခုလိုတေၾကာ့ျပန္တိုင္ခိုက္ေနတဲ႕ အေပၚမွာ တစုံတရာ ေဝဖန္ေျပာဆိုျခင္းမရွိပါဘူး။ ဂါဇာက က်န္းမာေရးဆိုင္ရာ တာဝန္ခံေတြကေတာ့ တနဂၤေႏြေန႕တိုက္ခိုက္မွဳေတြေၾကာင္႕ ေသဆုံးသူ အေယာက္၃၀ ရွိသြားျပီလို႕ေျပာပါတယ္။',
// 			'user_id' => $professional->id
// 			));
// 		Post::create(array(
// 			'title' => 'ICYMI Productivity',
// 			'content' => 'ICYMI: Productivity, file management, media, system, security -- here are 25 of the most useful free and almost-free desktop apps, tested on Windows 7, Windows 8, and Windows 8.1 Update 1.',
// 			'user_id' => $professional->id
// 			));
// 		Post::create(array(
// 			'title' => 'ေက်ာင္း၀ရန္တာၿပိဳက်ခဲ့သည့္ေက်ာင္းမွ ေက်ာင္းအုပ္ႀကီးကို ရာထူးေလွ်ာ့ခ်အေရးယူ ',
// 			'content' => 'က်ာင္းစဖြင့္သည့္ေန႔တြင္ ေက်ာင္း၀ရန္တာၿပိဳက်ခဲ့သည့္ ပုတီးကုန္း အထကမွ ေက်ာင္း အုပ္ဆရာႀကီးအား အလက ေက်ာင္းအုပ္အျဖစ္ ရာထူးေလွ်ာ့ ခ်အေရးယူခဲ့ေၾကာင္း ပဲခူးအ ေနာက္ပိုင္းတုိင္း ပညာေရးၫႊန္ ၾကားေရးမွဴး႐ုံးမွ သတင္းရရွိ သည္။',
// 			'user_id' => $professional->id
// 			));

// 		$this->command->info('Post datas have benn finished!')
	}
}