# PHP K8s Client

```php
$c = new \k8s\Client('http://127.0.0.1:8080');
dump($c->getDeploymentList());
dump($c->getNodeList());
dump($c->getPodList());
foreach ($c->getPodList()->items as $pod) {
    dump($pod->spec->containers);
}
```
