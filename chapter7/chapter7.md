# HTMLやXMLの文章を操作　〜DOM

## DOMの基本

### DOMの基本
* HTMLやXMLのようなマークアップ言語で書かれたドキュメントにアクセスするための標準的な仕組み
* クロスブラウザ環境で互換性の高いコードが書ける
* ドキュメントを「ドキュメントツリー」として扱う
* 文章に含まれる要素、属性、テキストをそれぞれオブジェクトとしてみなす
* このオブジェクトを「ノード」という

### 特定ノードの取得

#### ノードの取得方法
1. ID値やタグ名といったキーによって目的の要素を直接取得する**ダイレクトアクセス**
2. ある要素を起点にその子要素、親要素、兄弟要素といったように相対的な位置関係でノードを取得する**ノードウォーキング**

* ID値をキーにノードを取得する
 * document.getElementbyId('ID値');

* タグ名をキーにノードを取得する
 * getElementByTagName
 * 戻り値はNodeListで返る

* Class属性をキーに要素を取得する
 * getElementsByClassName
 * 戻り値はNodeListで返る

 * 相対的な位置関係でノードを取得する
  * childNode
  * 最初の子ノード firstChild
  * 次の子ノード nextSibling

### 属性値を取得/設定する
* 多くの属性は「要素ノードの同名のプロパティ」としてアクセスできる
* setAttribute, getAttribute
 * HTMLとJavaScriptで名前の相違を意識しなくていい
 * 取得, 設定する属性名をスクリプトから動的に変更できる

### 不特定の属性を取得する
* 特定の要素ノードに属するすべての属性を取得したい場合にはattributeプロパティを使用する
* attributesプロパティは要素ノードに含まれる全属性のリストをNamedNodeMapオブジェクトとして返す。
* 個別のノードに名前、インデックス番号のいずれを使ってもアクセスできる

### ノードを追加/置換/削除
* 要素/ノードを作成する
 * document.createElement, document.createTextNode
 * 生成されたノードはどこにも関連付けられていない状態
* ノード動詞を組み立てる
 * .appendChild()
* 属性ノードを追加する
 * 属性ノードを設定するには属性と同名のプロパティを設定する
 * createAttribute
 * setAttributeNode

* ノードを置換する
 * replaceChild
* ノードを削除する
 * removeChild

### イベントハンドラの問題
* イベントハンドラの問題点
 * 同一の要素/同一のイベントに対して、複数のイベントハンドラを定義することはできない
 * ひとつのライブラリがある要素のあるイベントを組み合わせて使ってしまったとしたら、他のライブラリで同一要素の同一イベントを使った処理が動作しなくなる

* イベントリスナ
 * イベントハンドラと同様、発生したイベントに対応してその処理内容を定義するコードの関数
 * 同一要素の同一イベントに対して、複数のイベントリスナを関連付けできる
 * いったん設定したイベントリスナを削除できる
 * IEでは`attachEventメソッド`を使用し、それ以外では`addEventListenerメソッド`を使用しなければいけない（ブラウザによって実装が異なる
 * クロスブラウザを意識したコード記述しなければいけない

* イベントの発生元要素や発生位置（座標）、押下されたキーなどの情報をイベントリスナから3章したいときはEventオブジェクトを使用する

* イベントの上位要素にも通知される
 * バブリング(Bubbling)
 * バブリングを行ってほしくない時は明示的に抑制する必要がある
