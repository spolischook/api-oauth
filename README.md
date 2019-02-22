### OAuth test

#### Setup

1. Copy `.env` file into `.env.local`  
2. Put applications credentials in `env.local`, see [hwi/oauth-bundle section](./.env#L37)
3. Install dependencies and start server on `localhost:8001`
or any other domain that is used in redirect url setting.

```bash
composer install
bin/console server:start localhost:8001
```

#### How it looks like

![Main page](doc/images/main.png)
