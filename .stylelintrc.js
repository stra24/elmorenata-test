module.exports = {
  extends: [
    'stylelint-config-standard-scss',
    'stylelint-config-recess-order',
    'stylelint-config-prettier',
  ],
  plugins: [
    'stylelint-declaration-use-variable', // SCSSで特定プロパティの変数使用を強制するためにこのプラグインを使用する。
  ],
  rules: {
    'selector-class-pattern': null, // セレクタ名（クラス）の制限をなくす。
    'scss/at-mixin-argumentless-call-parentheses': 'always', // 互換性のため引数なしのmixin呼び出しの際は括弧強制
    'sh-waqar/declaration-use-variable': [['/color/', 'z-index', 'font-size']], // 変数使用を強制する。
    'color-function-notation': 'legacy', // SCSSは新仕様（rgb()、rgba()がスペース区切りになる）にまだ対応していないため、カンマ削除のフォーマットがされないようにする。
    'alpha-value-notation': 'number', // これを指定しないとrgbaのアルファ値が％に変換されてSCSSのコンパイルがエラーになってしまう。
  },
};
