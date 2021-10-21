## USAGE

To generate your custom client with your custom configs :

1 - Install the swagger-codegen cli

2 - Execute the following command in the current folder :

```bash
swagger-codegen generate -i swagger.json -l php -c config.json -o kizeo-forms-client --invoker-package="Your\Namespace"
```
