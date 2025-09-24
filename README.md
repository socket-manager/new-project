# NEW-PROJECT：新規開発環境プロジェクト
NEW-PROJECT は SOCKET-MANAGER Framework を使ったソケット通信サーバーの新規プロジェクト開発テンプレートです。  
主に TCP/UDP ソケット通信、カスタムプロトコル、ビジネスロジックを PHP で開発するための環境と雛形を提供します。Laravel との連携も可能です。

---

## 【 概要 】
このプロジェクトは、ソケット通信のサーバーアプリケーションを素早く立ち上げ、独自のプロトコルやビジネスロジックを実装できるようにするための開発環境です。プロトコル部やコマンド（ビジネスロジック）部は自由に定義できますが、対象プロトコルに関する知識が必要になります。事前にアーキテクチャを確認することを推奨します。

---

## 【 特徴 】
- ソケット（TCP/UDP）ベースのサーバーフレームワーク
- 独自プロトコル／ビジネスロジック実装を簡単に追加可能
- CLI ツールで雛形（メイン処理、UNIT定義、設定ファイル等）を自動生成
- Laravel と連携してアプリケーションと統合可能

---

## 【 インストールと動作確認 (Quick Start) 】
プロジェクトルートで CLI を使ってメイン処理クラスを生成します。ここでは例として `MainForTest` を作成します。

1. メイン処理クラスの生成
```bash
php worker craft:main MainForTest
```

出力例（成功時）:
```text
[success] メイン処理クラスの生成に成功しました (MainForTest)
```

2. 生成したコマンドが登録されているか確認
```bash
php worker
```

出力の Usage セクションに `app:main-for-test` が追加されていることを確認してください。例:
```text
SOCKET-MANAGER Framework 1.0.0

Usage:
  command [arguments]

 main
  app:main-for-test                               Command description
 craft
  craft:init <初期化クラス名>                     初期化クラスの生成
  craft:parameter <UNITパラメータクラス名>        UNITパラメータクラスの生成
  craft:protocol <プロトコルUNIT定義のクラス名>   プロトコルUNIT定義のクラスとステータス名Enumの生成
  craft:command <コマンドUNIT定義のクラス名>      コマンドUNIT定義のクラスとキュー／ステータス名Enumの生成
  craft:main <メイン処理のクラス名>               メイン処理クラスの生成
  craft:setting <設定ファイル名>                  設定ファイルの生成
  craft:locale <メッセージファイル名>             メッセージファイルの生成
```

3. サーバー起動（例: ポート 10000）
```bash
php worker app:main-for-test 10000
```

4. 別端末でポートが LISTEN されているか確認（Windows PowerShell 例）
```powershell
netstat -ano | Select-String -Pattern "127.0.0.1:10000"
```

期待される出力例:
```text
TCP         127.0.0.1:10000        0.0.0.0:0              LISTENING       21536
```

---

## 【 使い方の例 】
- プロトコル定義（craft:protocol）を使ってプロトコル UNIT とキュー／ステータス Enum を生成
- コマンド（ビジネスロジック）定義（craft:command）でコマンド UNIT とキュー／ステータス Enum を生成
- メイン処理（craft:main）で接続の受け取り → プロトコル解析 → コマンドキュー投入 → 処理の流れを実装

詳細はプロジェクトのドキュメントを参照してください。

---

## 【 ドキュメント 】
詳しい使用方法やアーキテクチャの説明は下記のドキュメントを参照してください。  
- アーキテクチャ: https://socket-manager.github.io/document/architecture.html  
- NEW-PROJECT の使い方: https://socket-manager.github.io/document/new-project.html

これらのページには用語や内部設計の説明もあるため、初めて触る場合は先に目を通すことを推奨します。

---

## 【 Laravel連携 】
このプロジェクトは Laravel と連携できます。連携手順やサンプルは下記を参照してください。  
- Laravel 連携ガイド: https://socket-manager.github.io/document/laravel.html

---

## 【 Contact Us 】
バグ報告やご要望などは<a href="mailto:lib.tech.engineer@gmail.com">`こちら`</a>から受け付けております。

---

## 【 License 】
MIT, see <a href="https://github.com/socket-manager/new-project/blob/main/LICENSE">LICENSE file</a>.