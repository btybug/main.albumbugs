import React from 'react';
import {Flex, Box} from 'reflexbox'
import Colors from '../utils/colors'
import {Tabs, Tab, TabId, Classes, ITreeNode, Tree, Checkbox} from "@blueprintjs/core"
import SplitPane from 'react-split-pane'
import API from '../utils/api'
import {BeatLoader} from 'halogenium'
import Draggable from 'react-draggable'
import 'react-table/react-table.css'
import ReactTable from 'react-table'

import {Query, Builder, Utils as QbUtils} from 'react-awesome-query-builder'
import config from '../utils/queryConfig'
import 'react-awesome-query-builder/css/styles.scss'
import 'react-awesome-query-builder/css/compact_styles.scss'
import 'react-awesome-query-builder/css/denormalize.scss'

import brace from 'brace'
import AceEditor from 'react-ace'

import 'brace/mode/mysql'
import 'brace/theme/monokai'

const api = API.create()

export default class MainStudio extends React.Component {

    state = {
        navbarTabId: 'Columns',
        animate: false,
        nodes: [{
            id: 0,
            label: "forms_cms",
            icon: 'database',
            secondaryLabel: (
                <BeatLoader color="#c0c0c0" size="12px" margin="4px" verticalAlign="middle"/>
            )
        }],
        selectedTables: [],
        columnsData: [],
        fields: {},
        generatedQuery: '',
        queryString: '',
    }

    componentDidMount() {
        this._loadTables().then()
    }

    handleNavbarTabChange = (navbarTabId: TabId) => this.setState({navbarTabId});

    handleNodeCollapse = (nodeData: ITreeNode) => {
        nodeData.isExpanded = false;
        this.setState(this.state);
    }

    handleNodeExpand = (nodeData: ITreeNode) => {
        nodeData.isExpanded = true;
        this.setState(this.state);
    }

    handleNodeClick = (nodeData: ITreeNode) => {
        let nodes = this.state.nodes,
            currentNode = nodes[0].childNodes[nodeData.id - 1],
            lastID = nodes[0].childNodes.length,
            childNodes = [],
            selectedTables = this.state.selectedTables

        if (nodeData.id === 0 || !currentNode || currentNode.childNodes) return

        currentNode.secondaryLabel = (
            <BeatLoader color="#c0c0c0" size="10px" margin="4px" verticalAlign="middle"/>
        )

        this.setState({nodes})

        this._loadColumns(nodeData.label).then((columns) => {

            delete currentNode.secondaryLabel

            childNodes.push({
                id: nodeData.id + "__" +lastID,
                label: "*",
                columnType: "all",
                icon: 'pause',
                table: nodeData.label
            })

            columns.map((column, index) => {
                childNodes.push({
                    id: nodeData.id + "_" +lastID + index,
                    label: column.COLUMN_NAME,
                    columnType: column.DATA_TYPE,
                    icon: 'pause',
                    table: nodeData.label
                })
            })

            currentNode.childNodes = childNodes
            currentNode.hasCaret = true

            selectedTables.push(currentNode)

            this.setState({nodes, selectedTables})
        })
    }

    _loadColumns = async (table) => {
        const columnsRequest = await api.listColumns(table)
        return columnsRequest.data.data
    }

    _loadTables = async () => {
        const tablesRequest = await api.listTables()
        const tables = tablesRequest.data.data

        let nodes = this.state.nodes,
            childNodes = []

        tables.map((table, index) => {
            childNodes.push({
                id: index + 1,
                label: table.Tables_in_forms_cms,
                icon: 'th',
            })
        })

        delete nodes[0].secondaryLabel
        nodes[0].hasCaret = true
        nodes[0].isExpanded = true
        nodes[0].childNodes = childNodes

        this.setState({nodes})
    }

    buildSQLQuery(){
        let generatedQuery = 'SELECT ',
            fields = [],
            tables = [],
            fieldsQuery

        Object.keys(this.state.fields).map((key) => {
            fields.push(this.state.fields[key].label)
        })

        this.state.selectedTables.map((table) => {
            tables.push(table.label)
        })

        fieldsQuery = fields.join(', ')
        if(tables.length === 1){
            fieldsQuery = fieldsQuery.replace(new RegExp(tables[0] + ".", "g"), "")
        }

        generatedQuery += fieldsQuery + ' FROM ' + tables.join(', ') + ' WHERE ' + this.state.queryString

        this.setState({ generatedQuery })
    }

    builderUpdate(tree) {
        config.fields = this.state.fields
        let queryString = QbUtils.queryString(tree, config)
        if(queryString){
            queryString = queryString.replace(/___/g, '.')
        }

        if(queryString){
            this.setState({ queryString }, () => {
                this.buildSQLQuery()
            })
        }
    }

    getChildren = (props) => {
        return (
            <div className="query-builder">
                <Builder {...props} />
            </div>
        )
    }

    render() {

        return (
            <Flex column style={{flex: 1}}>
                <Box px={2} style={{backgroundColor: Colors.black, height: 80}}>Header</Box>
                <Box px={2} style={{backgroundColor: '#7a7a7a', height: '100%', position: 'relative'}}>
                    <SplitPane split="vertical" defaultSize={350} minSize={200} maxSize={400}>
                        <div style={{backgroundColor: Colors.white, height: '100%', overflowY: 'scroll'}}>
                            <Tree
                                contents={this.state.nodes}
                                onNodeCollapse={this.handleNodeCollapse}
                                onNodeExpand={this.handleNodeExpand}
                                onNodeClick={this.handleNodeClick}
                                className={Classes.ELEVATION_0}
                            />
                        </div>
                        <div className="visual-editor">
                            {this.state.selectedTables.map((table) => (
                                <Draggable
                                    key={table.id}
                                    bounds='.visual-editor'
                                    onStart={this.handleStart}
                                    onDrag={this.handleDrag}
                                    onStop={this.handleStop}>

                                    <div className="pt-dialog" style={{padding: 0, margin: 0, width: 300}}>
                                        <div className="pt-dialog-header">
                                            <span className="pt-icon-large pt-icon-th" />
                                            <h4 className="pt-dialog-header-title">{table.label}</h4>
                                            <button className="pt-dialog-close-button pt-icon-small-cross" />
                                        </div>
                                        <div style={{padding: 10, maxHeight: 200, overflowY: 'auto'}}>
                                            <ul className="pt-tree-node-list pt-tree-root">
                                                {table.childNodes.map((column) => (
                                                    <li className="pt-tree-node" key={column.id}>
                                                        <div className="pt-tree-node-content" style={{paddingLeft: 10}}>
                                                            <Checkbox onChange={(e) => {
                                                                const isChecked = e.target.checked

                                                                let columnsData = this.state.columnsData

                                                                if(isChecked){
                                                                    columnsData.push({
                                                                        id: column.id,
                                                                        expression: column.table + "." + column.label,
                                                                        name: column.label,
                                                                        columnType: column.columnType
                                                                    })

                                                                    // Query builder fields
                                                                    let field = {};
                                                                    switch (column.columnType){
                                                                        // Number
                                                                        case 'smallint':
                                                                        case 'bigint':
                                                                        case 'decimal':
                                                                        case 'float':
                                                                        case 'double':
                                                                        case 'int':
                                                                            field.type='number'
                                                                            break

                                                                        // Date
                                                                        case 'date':
                                                                        case 'year':
                                                                            field.type = 'date'
                                                                            break

                                                                        case 'datetime':
                                                                        case 'timestamp':
                                                                            field.type = 'datetime'
                                                                            break

                                                                        case 'time':
                                                                            field.type = 'time'
                                                                            break

                                                                        case 'tinyint':
                                                                            field.type = 'boolean'
                                                                            break

                                                                        default:
                                                                            field.type='text'
                                                                    }

                                                                    let fields = this.state.fields,
                                                                        fieldID = column.table + "___" + column.label

                                                                    fields[fieldID] = field
                                                                    fields[fieldID].label =  column.table + "." + column.label

                                                                    this.setState({ fields }, () => {
                                                                        this.buildSQLQuery()
                                                                    })
                                                                }else{
                                                                    columnsData = columnsData.filter((columnData) => {
                                                                        return columnData.id !== column.id
                                                                    })

                                                                    delete this.state.fields[column.id]
                                                                    this.buildSQLQuery()
                                                                }

                                                                this.setState({ columnsData })

                                                            }} className="panel-checkbox" />

                                                            <span className="pt-tree-node-icon pt-icon-standard pt-icon-pause"/>
                                                            <span className="pt-tree-node-label">{column.label}</span>
                                                            <span className="pt-tree-node-secondary-label" style={{color: '#a4a9ad'}}>{column.columnType}</span>
                                                        </div>
                                                    </li>
                                                ))}
                                            </ul>
                                        </div>
                                    </div>

                                </Draggable>
                            ))}
                        </div>
                    </SplitPane>
                </Box>
                <Box style={{backgroundColor: '#f6f6f6', height: 400}}>
                    <Flex style={{flex: 1}}>
                        <Box px={2} style={{flex: 3}}>
                            <Tabs
                                animate={this.state.animate}
                                id="navbar"
                                onChange={this.handleNavbarTabChange}
                                selectedTabId={this.state.navbarTabId}
                            >
                                <Tab id="Columns" title="Columns" panel={(
                                    <ReactTable
                                        data={this.state.columnsData}
                                        columns={[{
                                            Header: 'Column Expression',
                                            accessor: 'expression'
                                        }, {
                                            Header: 'Column Name',
                                            accessor: 'name'
                                        }, {
                                            Header: 'Column Type',
                                            accessor: 'columnType'
                                        }]}
                                        defaultPageSize={10}
                                        style={{height: 250}}
                                    />
                                )}/>
                                <Tab id="Files" title="Filters" panel={(
                                    <Query
                                        {...config}
                                        fields={this.state.fields}
                                        get_children={this.getChildren}
                                        onChange={(tree) => {
                                            this.builderUpdate(tree)
                                        }}
                                    />
                                )}/>
                                <Tab id="Builds" title="Limits & Sorting"/>
                            </Tabs>
                        </Box>
                        <Box px={2} style={{flex: 2, maxHeight: '100%'}}>
                            <AceEditor
                                fontSize={16}
                                wrapEnabled={true}
                                height='100%'
                                width='100%'
                                value={this.state.generatedQuery}
                                mode="mysql"
                                theme="monokai"
                                name="UNIQUE_ID_OF_DIV"
                                readOnly={true}
                                editorProps={{$blockScrolling: true}}
                            />
                        </Box>
                    </Flex>
                </Box>
            </Flex>
        )
    }
}
