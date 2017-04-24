# vs/framework

## Running with Vagrant
1. Clone via Git with `git clone https://github.com/PXgamer/vs-framework`
2. Just run `vagrant up` in the root directory.
3. That's all, just browse to: [http://192.168.69.69](http://192.168.69.69)

## Setting up a Vagrant SSH tunnel
_This basically allows you to connect to the internal MySQL server running on Vagrant from an app such as PhpStorm._

#### SSH Tunnel Details:
**Host:** 127.0.0.1  
**Username:** ubuntu  
**Private Key:** `./.vagrant/machines/default/virtualbox/private_key`  
**Port:** 2222