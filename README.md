# NEW-PROJECT on SOCKET-MANAGER Framework
ソケット通信サーバーアプリの新規プロジェクト開発環境です。<br />

プロトコル、コマンド処理をオリジナルで作成できますが、ある程度のソケット通信の知識が必要になりますのであらかじめご了承ください。<br />
また<a href="https://socket-manager.github.io/document/architecture.html" target="_blank">アーキテクチャ</a>のページをご覧になった上で進めていただいた方が用語の理解も含めてより効率的に進められます。

## インストール後の動作確認
プロジェクトルートで以下のコマンドを実行してメイン処理クラスを作成します。<br />
今回は`MainForTest`という名前で作成します。

以下のように表示されれば成功です。

<pre>
> php worker craft:main MainForTest
[success] メイン処理クラスの生成に成功しました (MainForTest)
</pre>

`php worker`を実行してUsageを表示すれば以下の`main`項目に`app:main-for-test`が追加されている事が確認できます。

<pre>
> php worker
SOCKET-MANAGER Framework 1.0.0

Usage:
  command [arguments]

 main
  app:main-for-test                               Command description
 craft
  craft:init <初期化クラス名>                     初期化クラスの生成
  craft:parameter &lt;UNITパラメータクラス名&gt;        UNITパラメータクラスの生成
  craft:protocol <プロトコルUNIT定義のクラス名>   プロトコルUNIT定義のクラスとステータス名Enumの生成
  craft:command <コマンドUNIT定義のクラス名>      コマンドUNIT定義のクラスとキュー／ステータス名Enumの生成
  craft:main <メイン処理のクラス名>               メイン処理クラスの生成
  craft:setting <設定ファイル名>                  設定ファイルの生成
  craft:locale <メッセージファイル名>             メッセージファイルの生成
</pre>

以下のコマンドを実行して今回作成したサーバーを起動します。

<pre>
> php worker app:main-for-test 10000
</pre>
※今回は10000ポートで起動しています。

その後PowerShellなどで以下のように`netstat`コマンドを実行して10000ポートがListenされている事が確認できれば正常にインストールされています。

<pre>
> netstat -ano | Select-String -Pattern "127.0.0.1:10000"
TCP         127.0.0.1:10000        0.0.0.0:0              LISTENING       21536
</pre>

## 補足
プロジェクトの詳しい使い方は<a href="https://socket-manager.github.io/document/new-project.html" target="_blank">こちら</a>をご覧ください。

このプロジェクトはLaravelと連携できます。<br />
詳しい連携方法は<a href="https://socket-manager.github.io/document/laravel.html" target="_blank">こちら</a>をご覧ください。

## Contact Us
バグ報告やご要望などは<a href="mailto:lib.tech.engineer@gmail.com">`こちら`</a>から受け付けております。

## License
MIT, see <a href="https://github.com/socket-manager/new-project/blob/main/LICENSE">LICENSE file</a>.