# terraform

IaC resources

1. requirements
    - ansible
    - packer
    - terraform


### setup
```bash
cd network && terraform apply
```

```bash
cd production/gmi && packer build image.json
cd production && terraform apply
```

```bash
cd dns && terraform apply
```

### posthumous setup
if somehow you need to patch the ansible playbook on an existent image you might run
```bash
ANSIBLE_HOST_KEY_CHECKING=False ansible-playbook -u tom -i '<INSTANCE_IP>,' --private-key ~/.ssh/id_rsa playbook.yml -e ansible_python_interpreter=/usr/bin/python3
```
