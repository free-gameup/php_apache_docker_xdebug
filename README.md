# php_apache_docker_xdebug

php7.2 + apache + docker + xdebug

---
## 環境構築
### Dockerコンテナの設定
* dockerインストール
    * https://hub.docker.com/editions/community/docker-ce-desktop-mac
* dockerコンテナの起動
```
cd ~/[ソース配置先]
docker-compose up
```
* ブラウザでアクセス
    * http://localhost:8081/
* phpinfoが表示され、「xdebug」の設定があることを確認

### リモートデバッグの設定
* phpstrome > 右上の受話器マークアイコンをクリックしてデバックモードに設定
* index.phpの下記に、デバッグポイントを設定
```
<?php
// php周りの設定 確認用
phpinfo(); ← ここにデバッグポイントを設定！
```
* ブラウザアクセス
    * http://localhost:8081/
* 自動的にデバッグの設定が表示されるため「accept」を押下
* デバッグポイントで処理が止まれば設定完了

### おまけ - Dockerの操作
| 操作内容 | コマンド | 備考 |
|--|--|--|
| イメージ一覧確認 | docker image ls | |
| 起動中のコンテナ確認 | docker container ls | |
| 全てのコンテナ確認 | docker container ls -a | |
| コンテナの停止 | docker stop [コンテナ名] | |
| コンテナの起動 | docker start [コンテナ名] | |
| コンテナの再起動 | docker restart [コンテナ名] | |
| 起動中のコンテナに入る | docker exec -it [コンテナ名] bash | 抜け出すときは、exit |
