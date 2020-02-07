# shousei

## local

http://localhost

**wordpress**

- url : http://localhost/wp-admin
- name : shousei
- password : passw0rd
- email : shousei@example.com


### フロント開発

```sh
cd wordpress/wp-content/themes/shousei/assets-src
# npm install # or yarn
npm start # or yarn start
npm run build # or yarn build
```

`wordpress/wp-content/themes/shousei/assets-src`  
↓ 出力先  
`wordpress/wp-content/themes/shousei/assets`

#### scss

```sh
`url()`で画像を指定する場合は、`wordpress/wp-content/themes/shousei/assets-src/scss/style.scss`からの相対パス
scss、jsで利用しない画像は`wordpress/wp-content/themes/shousei/img`
```

### メール送受信確認
http://localhost:1080/