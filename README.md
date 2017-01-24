# Chance Lib
---
根据概率抽奖

需要给一个奖品权重数组

## install
```
composer require zedisdog/chance
```

## usage
```php
$chance = new zedisdog/Chance($proArr);
$id = $chance->getRand();
```