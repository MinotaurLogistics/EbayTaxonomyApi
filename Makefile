generate:
	docker run --rm -v ${PWD}:/codegen openapitools/openapi-generator-cli generate -i https://developer.ebay.com/api-docs/master/commerce/taxonomy/openapi/3/commerce_taxonomy_v1_oas3.yaml -o /codegen -g php --git-user-id minotaurlogistics --git-repo-id ebay-taxonomy-api --invoker-package 'Swagger\EbayTaxonomyClient' --artifact-version 1.0 --api-package 'GeneratedApi'
