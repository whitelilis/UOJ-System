<?php echoUOJPageHeader(UOJLocale::get('help')) ?>
<article>
	<header>
		<h2 class="page-header">常见问题及其解答</h2>
	</header>
	<section>
		<header>
			<h4>1. 注册后怎么上传头像</h4>
		</header>
		<p><?= UOJConfig::$data['profile']['oj-name-short'] ?>不提供头像存储服务。每到一个网站都要上传一个头像挺烦的对不对？我们支持Gravatar，请使用Gravatar吧！Gravatar是一个全球的头像存储服务，你的头像将会与你的电子邮箱绑定。在各大网站比如各种Wordpress还有各种OJ比如Vijos、Contest Hunter上，只要你电子邮箱填对了，那么你的头像也就立即能显示了！</p>
		<p>快使用Gravatar吧！ Gravatar地址：<a href="https://cn.gravatar.com/">https://cn.gravatar.com/</a>。进去后注册个帐号然后与邮箱绑定并上传头像，就ok啦！</p>
	</section>
	<section>
		<header>
			<h4>2. <?= UOJConfig::$data['profile']['oj-name-short'] ?>的测评环境</h4>
		</header>
		<p>测评环境是 Ubuntu Linux 14.04 LTS x64。</p>
		<p>C++的编译器是 g++ 5.4.0，编译命令：<code>g++ code.cpp -o code -lm -O2 -DONLINE_JUDGE</code>。如果选择C++11会在编译命令后面添加<code>-std=c++11</code>。</p>
		<p>C的编译器是 gcc 5.4.0，编译命令：<code>gcc code.c -o code -lm -O2 -DONLINE_JUDGE</code>。</p>
		<p>Pascal的编译器是 fpc 2.6.2，编译命令：<code>fpc code.pas -O2</code>。</p>
		<p>Java7的JDK版本是 jdk-7u76，编译命令：<code>javac code.java</code>。</p>
		<p>Java8的JDK版本是 jdk-8u31，编译命令：<code>javac code.java</code>。</p>
		<p>Python会先编译为优化过的字节码<samp>.pyo</samp>文件。支持的Python版本分别为Python 2.7和3.4。</p>
		<p>Javascript 的版本为 node v6.9.2</p>
		<p>C# 先用 mono 编译, 再用 mono 来执行，版本为 <code>Mono JIT compiler version 4.2.1 (Debian 4.2.1.102+dfsg2-7ubuntu4) </code> </p>
		<p>Ojbect-C 的编译方法为  <code>gcc  answer.m `gnustep-config --objc-flags` -lobjc -lgnustep-base  -o answer </code> </p>
		<p>Go 的版本为 1.7 </p>
		<p>PHP 的版本为 7 </p>
	</section>
	<section>
		<header>
			<h4>3. 递归 10<sup>7</sup> 层怎么没爆栈啊</h4>
		</header>
		<p>没错就是这样！除非是特殊情况，<?= UOJConfig::$data['profile']['oj-name-short'] ?>测评程序时的栈大小与该题的空间限制是相等的！</p>
	</section>
	<section>
		<header>
			<h4>4. 交互式类型的题怎么本地测试</h4>
		</header>
		<p>唔……好问题。交互式的题一般给了一个头文件要你include进来，以及一个实现接口的源文件grader。好像大家对多个源文件一起编译还不太熟悉。</p>
		<p>对于C++：<code>g++ -o code grader.cpp code.cpp</code></p>
		<p>对于C语言：<code>gcc -o code grader.c code.c</code></p>
		<p>如果你是悲催的电脑盲，实在不会折腾没关系！你可以把grader的文件内容完整地粘贴到你的code的include语句之后，就可以了！</p>
		<p>什么你是萌萌哒Pascal选手？一般来说都会给个grader，你需要写一个Pascal单元。这个grader会使用你的单元。所以你只需要把源文件取名为单元名 + <code>.pas</code>，然后：</p>
		<p>对于Pascal语言：<code>fpc grader.pas</code></p>
		<p>就可以啦！</p>
	</section>
	<section>
		<header>
			<h4>5. 联系方式</h4>
		</header>
		<p>如果你想出题、想办比赛、发现了BUG或者对网站有什么建议，可以通过下面的方式联系我们：</p>
		<ul>
			<li>私信联系<?= UOJConfig::$data['profile']['administrator'] ?>。</li>
			<li>邮件联系<?= UOJConfig::$data['profile']['admin-email'] ?>。</li>
			<?php if (UOJConfig::$data['profile']['qq-group']!=''): ?>
			<li>你也可以进QQ群水水，群号是<?= UOJConfig::$data['profile']['qq-group'] ?>。</li>
			<?php endif ?>
		</ul>
	</section>
</article>

<?php echoUOJPageFooter() ?>
