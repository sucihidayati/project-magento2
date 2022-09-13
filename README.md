# project-magento2

#Download Magento 2 community 2.4.4 with Sample Data by Composer

- Create an account on Magento marketplace and go to https://marketplace.magento.com/customer/accessKeys/ to get private and public access key. If you have access keys, you can use those for install magento.

- Run below command for Magento 2.4.4
  composer create-project --repository-url=https://repo.magento.com/ magento/project-community-edition=2.4.4 local
  
  
#Intsall Sample Data for Magento 2.4.4 

- To install the sample data, run the below command
php bin/magento sampledata:deploy && php bin/magento indexer:reindex && php bin/magento se:up && php bin/magento se:s:d -f && php bin/magento c:f


#To install Magento 2 Extension Product Slider - Megaplaza

- Download The Most Popular Product Slider for Magento 2 and go to https://www.mageplaza.com/magento-2-product-slider-extension/
- Paste the file to app/code/
- Run the following command:
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
