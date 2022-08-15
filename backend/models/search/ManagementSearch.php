<?php
namespace backend\models\search;

use common\models\Article;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Management;

class  ManagementSearch extends Management{

    public function rules()
    {
        return[
            [['date'], 'default', 'value' => function () {
                return date(DATE_ISO8601);
            }]
        ];

    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    /**
     * Creates data provider instance with search query applied
     *
     * @param $params
     *
     * @return ActiveDataProvider
     */
    public function search($params){
        $query = Management::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([

        ]);

        return $dataProvider;
    }
}
?>