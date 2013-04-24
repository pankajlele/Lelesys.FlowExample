Lelesys.FlowExample
===================

This package demonstrates various examples with TYPO3 Flow

Note: this package is experimental and only used as example

Getting started
---------------
* include default route definition to your `Routes.yaml` file, as follows

```yaml
##
# Default route to map the first two URL segments to package and controller
# optional third URL segment is mapped to action

-
  name: 'default'
  uriPattern: '{@package}/{@controller}(/{@action})'
  defaults:
    '@action':     'index'
    '@format':     'html'
  appendExceedingArguments: true
```

* clone this package as Packages/Application/Lelesys.FlowExample

* run doctrine:migrate to populate dummy data

```
./flow doctrine:migrate
```

* URLs to test

** http://your_host/lelesys.flowexample/project/index
** http://your_host/lelesys.flowexample/participant/index
** http://your_host/lelesys.flowexample/participant/listidle