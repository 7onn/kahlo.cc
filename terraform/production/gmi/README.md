# kahlo-server

this configuration uses [Packer](https://packer.io) to create a [Machine Image](https://cloud.google.com/compute/docs/machine-images) on top of Ubuntu

## instructions

to build this image:

- install Packer
- set your gcloud credentials path at `variables.service_account_json`
- run `packer build image.json`

once the build finishes, it will output the new machine image id.
